<?php

namespace App\Http\Livewire\admin;

use App\Models\Tid;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class PendingTids extends PowerGridComponent
{
    use ActionButton;

    public $tid;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Tid>
     */
    public function datasource(): Builder
    {
        return Tid::query()
            ->join('users', 'users.id', '=', 'tids.user_id')
            ->select('tids.*', 'users.name as user_name')
            ->where('tids.status', false);
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [
            "User" => [
                "name",
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('user_id')
            ->addColumn('tid')
            ->addColumn('status')
            ->addColumn('created_at_formatted', fn (Tid $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Tid $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('USER ID', 'user_name', 'user_id'),

            Column::make('TID', 'tid')
                ->makeInputRange()
                ->editOnClick(),

            Column::make('STATUS', 'status')
                ->toggleable(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

            Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Tid Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            //    Button::make('edit', 'Edit')
            //        ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //        ->route('tid.edit', ['tid' => 'id']),

            //    Button::make('destroy', 'Delete')
            //        ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
            //        ->route('tid.destroy', ['tid' => 'id'])
            //        ->method('delete')

            Button::add('destroy')
                ->caption("Approve")
                ->class('btn btn-sm btn-success')
                ->emit('approveTid', ['id' => 'id'])
        ];
    }

    protected function getListeners()
    {
        return 'approveTid';
    }

    public function approveTid($id)
    {
        $tid = Tid::find($id['id']);
        $tid->status = true;
        $tid->save();

        $user = User::find($tid->user_id);
        $user->status = true;
        $user->save();

        // checking if this user has valid refer
        if ($user->refer != "default") {
            Log::info("User has valid refer");
            $upliner = User::where('username', $user->refer)->first();
            // checking if this both side are refered, not free
            if ($upliner->right != "free" && $upliner->left != "free") {
                $transaction = new Transaction();
                $transaction->user_id = $upliner->id;
                $transaction->amount = option("referCommision");
                $transaction->status = true;
                $transaction->sum = true;
                $transaction->type = 'reward';
                $transaction->reference = 'Reward Recieved form ' . $user->username;
                $transaction->save();
            }
        }

        // inserting deposit transaction

        $transaction = $user->transactions()->create([
            'amount' => option("fees"),
            'type' => 'deposit',
            'status' => true,
            'sum' => true,
            'referrence' => 'tid approved',
        ]);

        $transaction = $user->transactions()->create([
            'amount' => option("fees"),
            'type' => 'plan activation',
            'status' => true,
            'sum' => false,
            'referrence' => 'plan activated',
        ]);
    }


    public function onUpdatedEditable($id, $field, $value): void
    {
        Tid::query()->find($id)->update([
            $field => $value,
        ]);
    }






    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Tid Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($tid) => $tid->id === 1)
                ->hide(),
        ];
    }
    */
}

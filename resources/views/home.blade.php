@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="toDoInput"placeholder="add item" v-model="item" @keyup.enter="addItemToList">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" @click="addItemToList">Add</button>
                        </div>
                    </div>

                </div>

                <div class="panel-body">
                   <div v-if="todos.length">
                       <p>Here are all your to do items:</p>
                       <hr>
                       <ul>
                           <li v-for="todo in todos">
                               @{{ todo.item }}
                           </li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

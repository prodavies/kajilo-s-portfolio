@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                    <table id="dataTable" class="table table-striped table-advance table-hover ">
                        <thead style="background-color: #ff33ff">
                            <tr>
                            <th>id</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Subject</th>
                            <th>Customer Message</th>
                        </tr>
                    </thead>
                        <tbody> 
                            @php
                                $id = 1;
                            @endphp
                 @foreach ($messages as $message)
                    <tr>
                        <td>{{ $id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->message }}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr></tr>
                    </tfoot>
                    @php
                    $id++;
                 @endphp 
             @endforeach
            
            </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')
@section('content')

                    <div class="row">
                            <div class="col-lg-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                </div>
                            @endif 
                            @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                            @endif
                                <h2 class="title-1 m-b-25">Ticket Confrimations</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>time</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">User</th>
                                                <th class="text-right">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($booking as $bg)     
                                        <tr>        
                                        <td>{{$bg->date}}</td>
                                        <td>{{$bg->time}}</td>
                                        <td class="text-right">700</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">{{ \App\Models\User::where('id',$bg->u_id)->pluck('name')}}</td> 
                                        <td class="text-right">
                                            <form action="{{route('ticket_confirmation',$bg->id)}}" method="post">
                                                @csrf
                                             <button class="btn btn-success" type="submit">Confirm</button>
                                            </form>
                                           
                                        </td>       
                                        </tr> 
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection
@extends('layouts.master')



 @section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    
      </div>
    
      
    <!-- Main content -->
    <div class="content">
        <table class="table table-hover text-nowrap">
            <thead>
                 <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>type</th>
                    <th>color</th>
                    <th>start_date</th>
                    <th>end_date</th>
                    <th>update/edit</th>
                    <th>delete</th>
                </tr>
            
            
            </thead>
            @foreach($events as $event)
             <tbody> 
                <tr>
                    <td>{{ $event ->id}}</td>
                    <td>{{ $event ->titre}}</td>
                    <td>{{ $event ->type}}</td>
                    <td>{{ $event ->color}}</td>
                    <td>{{ $event ->start_day}}</td>
                    <td>{{ $event ->end_day}}</td>
                    <th><a href="{{ action('Eventcontroller@edit',$event['id'])}}">edit</a></th>
                    <th>
                            <form method="post" action="{{route('deleteEvents')}}"  accept-charset="UTF-8">
                                             @method('DELETE')
                                            {{ csrf_field() }}
                                            
                                <input type="hidden" name="id" value="{{$event->id}}">
                                    <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                    </th>
                </tr>
             </tbody>
             @endforeach
        </table>
        
        
        
        
            
    </div>

    
<!-- /.content -->
@endsection
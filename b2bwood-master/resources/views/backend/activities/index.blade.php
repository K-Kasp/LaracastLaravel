@extends('backend.layouts.app')
@section('content')
    <div class="card-body">
        <table class="table aiz-table mb-0">
            <thead>
            <tr>
                <th data-breakpoints="lg">#</th>
                <th data-breakpoints="lg">{{translate('Made By')}}</th>
                <th data-breakpoints="lg">{{translate('Action Description')}}</th>
                <th data-breakpoints="lg">{{translate('Properties')}}</th>
                <th data-breakpoints="lg">{{translate('Entity Affected')}}</th>
            </tr>
            </thead>
            <tbody>

            @foreach($activities as $activity)
                <tr>
                    {{--                    ID --}}
                    <td>{{$activity->id}}</td>
                    {{--                    Made By  --}}
                    <td>{{ $activity->causer->name }}</td>
                    {{--                    Action Description --}}
                    <td>{{$activity->description}}</td>
                    {{--                    Properties --}}
                    <td>{{$activity->properties}}</td>
                    {{--                    Entity Affected --}}
                    <td>
                        <strong>ID: </strong>{{$activity->subject->id}}<br>
                        <strong>Type: </strong>{{get_class($activity->subject)}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="aiz-pagination">
            {{ $activities->appends(request()->input())->links() }}
        </div>
    </div>
@endsection

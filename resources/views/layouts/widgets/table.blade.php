<table class="table {{ $class }}">
    <thead>
        <tr>
            <th class="col-sm-6">name</th>
            <th class="col-sm-2">created</th>
            <th class="col-sm-4"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tables as $t)
        <tr>
            <td> TH : {{$t->name_th}}
                <BR>
                 EN : {{$t->name_en}}
            </td>
            <td>{{$t->created_at}}</td>
            <td>
                <button type="button" class="btn btn-default btn-circle"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-file-text-o"></i></button>
                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>  </td>
        </tr>
        @endforeach
    </tbody>
</table>
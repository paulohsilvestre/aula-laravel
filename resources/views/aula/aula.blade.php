@extends('layout.index')
@section('title')
 <a href="/" class="logo"><strong>CADASTRO DE AULA</strong></a>
 <a href="/aulas/incluir" style="width:50px;" class="btn btn-sm btn-success float-rigth">INCLUIR</a>
@endsection
@section('content')
<table>
    <tr>
        <th>ID</th>
        <th>TURMA</th>
        <th>VALOR</th>
        <th>TURNO</th>
        <th>STATUS</th>
        <th>UPDATE</th>
        <th>CREATE</th>
    </tr>  
    @foreach($aulas as $a)  
    <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->turma}}</td>
        <td>{{$a->valor}}</td>
        <td>{{$a->turno}}</td>
        <td>{{$a->status}}</td>
        <td>{{$a->updated_at}}</td>
        <td>{{$a->created_at}}</td>
    </tr>  
    @endforeach
</table>
@endsection
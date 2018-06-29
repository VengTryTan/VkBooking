<table>

<th>Room ID</th>
<th>Name</th>
<tbody>
@foreach($rooms as $key=>$key)
<tr>
<td>{{$key->id}}</td>
<td>{{$key->name}}</td>
</tr>
@endforeach
</tbody>
</table> 


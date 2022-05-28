<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>

<h2>The padding Property</h2>

<p>This property adds space between the border and the content in a table.</p>

<table>
  <tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Email</th>
    <th scope="col">Email verified at</th>
    <th scope="col">Roles</th>
  </tr>
  <tr>
    <?php $no=1; ?>
      @foreach ($dataUser as $index => $row)
      <tr>
        <th scope="row">{{ $no++; }}</th>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->created_at->isoFormat('dddd, D MMM Y') }}</td>
        <td>
            @foreach ($row->roles as $role)
              {{ $role->name}}
            @endforeach
        </td>
      </tr>
      @endforeach
  </tr>
</table>

</body>
</html>



<table>
  <tbody>
    @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->image_url }}</td>
        </tr>
    @endforeach
  </tbody>
</table>

<style>
  table{
    width: 100%;
    border-spacing: 0;
  }

  table th{
    border-bottom: solid 2px #fb5144;
    padding: 10px 0;
  }

  table td{
    border-bottom: solid 2px #ddd;
    text-align: center;
    padding: 10px 0;
  }
</style>
<table>
  <tbody>
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->title }}</td>
            <td><img src={{ $movie->image_url }}></td>
            <td><a href="{{ route('movie.edit',$movie->id)}}">編集</a></td>
        </tr>
  </tbody>
  <th><a href="{{ route('movie.create')}}">新規作成</a></th>
  <th><a href="{{ route('movie.index')}}">一覧へ戻る</a></th>
</table>

<style>
  table{
    width: 100%;
    border-spacing: 0;
  }


  table td{
    border-bottom: solid 2px #ddd;
    text-align: center;
    padding: 10px 0;
  }
</style>
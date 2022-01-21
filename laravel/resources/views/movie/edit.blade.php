<table>
  <tbody>
        <tr>
          <form action="{{ route('movie.update', $movie->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <td>{{ $movie->id }}</td>
            <td><input type="text" name="title" value="{{ $movie->title }}"></td>
            <td><img src={{ $movie->image_url }}></td>
            <td>
              <button type="submit">編集する</button>
            </td>
          </form>

          <td>
            <form action="{{ route('movie.destroy', $movie->id) }}" enctype="multipart/form-data" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">削除する</button>
            </form>
          </td>
        </tr>
  </tbody>
  <th><a href="{{ route('movie.create')}}">新規作成</a></th>
  <th><a href="{{ route('movie.index')}}">一覧へ戻る</a></th>
</table>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
<table>
  <tbody>
        <tr>
          <form action="{{ route('movie.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <td><input type="text" name="title" value=""></td>
            <td>
              <button type="submit">作成する</button>
            </td>
          </form>
  </tbody>
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
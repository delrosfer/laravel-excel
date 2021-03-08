<table class="table table-bordered table-hover mt-3">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Titulo</th>
                      <th scope="col">Contenido del Post</th>
                      <th scope="col">Creado Por</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                    <tr>
                      <th scope="row">{{ $post->id }}</th>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->details }}</td>
                      <td>{{ $post->user->name }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
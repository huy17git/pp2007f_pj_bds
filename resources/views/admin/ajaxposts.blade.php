
@foreach ($posts as $post)
    <tr id="post" value={{ $post->id }}>
        <td>
            <div class="checkbox">
                <input id="selectable2" class="checkbox" type="checkbox" value={{ $post->id }}>
                <label for="selectable2"></label>
            </div>
            <div class="info">
                <span class="sub-title">{{ $post->name }}</span>
            </div>
        </td>
        <td>{{ $post->title }}</td>
        <td><span class="badge badge-pill badge-gradient-success">{{ $post->post_type['name'] }}</span>
        </td>
        <td>{{ $post->id }}</td>
        <td>{{ $post->created_at }}</td>
        <td> {{ $post->post_price }}</td>
        <td class="text-center font-size-18">
            @if ($post->type == 1)
                <a href="{!!  Route('nhadatban_single_post', $post->id) !!}" class="btn btn-info">View</a>
            @else
                <a href="{!!  Route('nhadatchothue_single_post', $post->id) !!}" class="btn btn-info">View</a>
            @endif
            {{-- @if (Auth::user()->inRole('admin'))
                --}}
                <a href="{!!  Route('editPost', $post->id) !!}" class="btn btn-info">Edit</a>

                <a href="javascript:;" class="btn btn-danger delete" post_id="{!!  $post->id !!}">Delete</a>
                {{-- @else --}}
                {{-- <a href="{!!  Route('memberEditPost', $post->id) !!}"
                    class="btn btn-info">Edit</a>
                <a href="javascript:;" class="btn btn-danger delete" post_id="{!!  $post->id !!}">Delete</a>
            @endif --}}

        </td>
    </tr>
@endforeach

<tr>
    <td>
        
    </td>
    <td></td>
    <td>
    </td>
    <td></td>
    <td style="font-size: 30px; font-weight: bold;">Total Date Price: </td>
    <td style="font-size: 30px; font-weight: bold;"> {{ $total_price }}</td>
    <td class="text-center font-size-18">
    </td>
</tr>

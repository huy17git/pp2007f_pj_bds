
<option class="ward">Ward</option>
@foreach ($wards as $ward)
    <option class="ward" value="{{ $ward->code }}"> {{ $ward->name }} </option>
@endforeach
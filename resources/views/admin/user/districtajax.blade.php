<option class="district" value="0">District</option>
@foreach ($districts as $district)
    <option class="district" onclick="selectDistrict({{ $district->code }})" value="{{ $district->code }}"> {{ $district->name }} </option>
@endforeach

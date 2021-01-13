<option class="district" value="">Tất cả</option>
@foreach ($districts as $district)
<option class="district" value="{{ $district->code }}" @if(!isset($_GET['district']) || $_GET['district']==0) @elseif($_GET['district']==$district->code)
    selected
    @endif
    > {{ $district->name }} </option>
@endforeach
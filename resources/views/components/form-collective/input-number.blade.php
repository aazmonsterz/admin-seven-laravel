<div class="form-group row">
    <label class="col-12 col-lg-{{ $column[0] }}">{{ $label }}</label>
    <div class="col-12 col-lg-{{ $column[1] }}">
        <div class="input-group">
            @isset($attributes['before'])
                <div class="input-group-prepend">
                    <span class="input-group-text bg-{!! (isset($attributes['color'])) ? $attributes['color'] : \AdminSeven::color() !!}">
                        {!! $attributes['before'] !!}
                    </span>
                </div>
            @endisset
        	<input 
        		type="number" 
        		class="form-control number {!! (isset($attributes['class'])) ? $attributes['class'] : '' !!}"
                @foreach($attributes as $key => $value)
                {{ $key }} = "{{ $value }}"
                @endforeach
        	/>
            @isset($attributes['after'])
                <div class="input-group-append">
                    <span class="input-group-text bg-{!! (isset($attributes['color'])) ? $attributes['color'] : \AdminSeven::color() !!}">
                        {!! $attributes['after'] !!}
                    </span>
                </div>
            @endisset
        </div>
    	@isset($help)
    		<small class="form-text text-muted"><i class="fa fa-info-circle mr-2"></i>{{ $help }}</small>
    	@endisset
    </div>
</div>
@push('js')
    <script type="text/javascript">
        $(document).on('keypress','.number',function(e)
        {
            var charCode = (e.which) ? e.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        })
    </script>
@endpush
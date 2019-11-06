@if($key = config('bugherd.project_key'))
    @if(\App::environment(config('bugherd.environments')))
        <script
            type="text/javascript" 
            src="https://www.bugherd.com/sidebarv2.js?apikey={{ $key }}"
            async="true">
        </script>
    @endif
@endif

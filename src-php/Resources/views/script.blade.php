@if($key = config('bugherd.project_key'))
<script
    type="text/javascript" 
    rc="https://www.bugherd.com/sidebarv2.js?apikey={{ $key }}"
    async="true">
</script>
@endif

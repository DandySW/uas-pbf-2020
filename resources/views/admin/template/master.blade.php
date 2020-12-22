<!DOCTYPE html>
<html lang="en">
   
    @include('admin.template.header')

    <body>
    
    @include('admin.template.navbar')
    
        @yield('content')
    
    @include('admin.template.footer')
    
    @include('admin.template.script')
    
    </body>
    
</html>
@if(session()->has('post'))
<div class="alert alert-primary">{{ session('post') }}</div>
@endif
@if(session()->has('del'))
<div class="alert alert-danger">{{ session('del') }}</div>
@endif
@if(session()->has('edit'))
<div class="alert alert-info">{{ session('edit') }}</div>
@endif
@if(session()->has('usercreate'))
<div class="alert alert-success" role="alert">{{ session('usercreate') }}</div>
@endif
@if(session()->has('comseccessful'))
<div class="alert alert-success" role="alert">{{ session('comseccessful') }}</div>
@endif
@if(session()->has('login'))
<div class="alert alert-info" role="alert">{{ session('login') }}</div>
@endif
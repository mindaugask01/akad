<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-3">
        <ul class="nav nav-pills" id="navigacija">
            <li role="presentation" class="{{ Request::is('admin') ? "active" : "" }}"><a href="{{ route('admin') }}">Pagrindinis</a></li>
            <li role="presentation" class="{{ Request::is('teachers') ? "active" : "" }}"><a href="{{ route('teachers.index') }}">Visi darbuotojai</a></li>
            <li role="presentation" class="{{ Request::is('modules') ? "active" : "" }}"><a href="{{ route('modules.index') }}">Visi sandai</a></li>
            <li role="presentation" class="{{ Request::is('grupes') ? "active" : "" }}"><a href="{{ route('grupes.index') }}">Grupės</a></li>
            <li role="presentation" class="{{ Request::is('programos') ? "active" : "" }}"><a href="{{ route('programos.index') }}">Programos</a></li>
            <li role="presentation" class="{{ Request::is('kruvis') ? "active" : "" }}"><a href="{{ route('kruvis.index') }}">Krūvių lentelė</a></li>
        </ul>
    </div>
</div>
    </div>
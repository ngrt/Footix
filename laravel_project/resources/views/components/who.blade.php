@if (Auth::guard('web')->check())
    <p class="text-success">
        You are logged in as <strong>USER</strong>
    </p>
@else

@endif

@if (Auth::guard('admin')->check())
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.players.index') }}">
                    <div class="dash-box dash-box-color-1">
                        <div class="dash-box-body">
                            <span class="dash-box-count">Players</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.teams.index') }}">
                    <div class="dash-box dash-box-color-2">
                        <div class="dash-box-body">
                            <span class="dash-box-count">Teams</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.games.index') }}">
                    <div class="dash-box dash-box-color-3">
                        <div class="dash-box-body">
                            <span class="dash-box-count">Games</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.games.index') }}">
                    <div class="dash-box dash-box-color-2">
                        <div class="dash-box-body">
                            <span class="dash-box-count">Users</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

@else

@endif
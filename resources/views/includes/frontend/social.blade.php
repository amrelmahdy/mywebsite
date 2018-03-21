<div class="social">
    <ul class="list-unstyled">
        @if($info->facebook != Null)
            <li><a href="{{ $info->facebook }}"><i class="fa fa-facebook fa-fw"></i></a></li>
        @endif
        @if($info->twitter != Null)
            <li><a href="{{ $info->twitter }}"><i class="fa fa-twitter fa-fw"></i></a></li>
        @endif
        @if($info->linkedin != Null)
            <li><a href="{{ $info->linkedin }}"><i class="fa fa-linkedin fa-fw"></i></a></li>
        @endif
        @if($info->instagram != Null)
            <li><a href="{{ $info->instagram }}"><i class="fa fa-instagram fa-fw"></i></a></li>
        @endif

        @if($info->google != Null)
            <li><a href="{{ $info->google }}"><i class="fa fa-google-plus fa-fw"></i></a></li>
        @endif
        @if($info->github != Null)
            <li><a href="{{ $info->github }}"><i class="fa fa-github fa-fw"></i></a></li>
        @endif
        @if($info->bitbucket != Null)
            <li><a href="{{ $info->bitbucket }}"><i class="fa fa-bitbucket fa-fw"></i></a></li>
        @endif

    </ul>
</div>
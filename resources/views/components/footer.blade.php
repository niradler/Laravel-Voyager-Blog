 <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                    @if(Voyager::setting('facebook'))
                            <li>
                            <a href="{{Voyager::setting('facebook')}}">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    @endif
                
                             @if(Voyager::setting('twitter'))
                            <li>
                             <a href="{{Voyager::setting('twitter')}}">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    @endif
                              @if(Voyager::setting('github'))
                            <li>
                             <a href="{{Voyager::setting('github')}}">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    @endif
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; {{Voyager::setting('company')}}</p>
                </div>
            </div>
        </div>
    </footer>

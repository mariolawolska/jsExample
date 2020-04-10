<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout.head')
    </head>
    <body>

        <div class="container-fluid">
            <div class="row no-gutter">

                <div class="col-lg-4 font-st">

                    <pre>
                        <span>*.js</span>
                        <code class="hljs {{ $codejs->language }}">{!! $codejs->value !!}</code>
                    </pre>
                </div>
                <div class="col-lg-4 font-st">

                    <pre>
                    <span>*.html</span>
                        <code class="hljs {{ $codehtml->language }}">{!! $codehtml->value !!}</code>
                    </pre>
                </div>
                <div class="col-lg-4 font-st">
                    <pre>
                    <span>*.css</span>
                        <code class="hljs {{ $codecss->language }}">{!! $codecss->value !!}</code>
                    </pre>
                </div>
            </div>

        </div>
        <div class="card-body" > <a  href="https://github.com/mariolawolska/UIJavaScript" class="bnt-more">GitHun</a></div>

    </body>

    @include('layout.footer')
</html>

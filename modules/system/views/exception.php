<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exception</title>
        <script src="<?= Url::asset('modules/system/assets/vendor/syntaxhighlighter/scripts/shCore.js') ?>"></script>
        <script src="<?= Url::asset('modules/system/assets/vendor/syntaxhighlighter/scripts/shBrushPhp.js') ?>"></script>
        <script src="<?= Url::asset('modules/system/assets/vendor/syntaxhighlighter/scripts/shBrushXml.js') ?>"></script>
        <link href="<?= Url::asset('modules/system/assets/css/styles.css') ?>" rel="stylesheet" />
        <link href="<?= Url::asset('modules/system/assets/vendor/syntaxhighlighter/styles/shCore.css') ?>" />
        <script src="<?= Url::asset('modules/system/assets/js/framework-bundle.min.js') ?>"></script>
        <meta name="turbo-visit-control" content="disable" />
        <meta charset="utf-8" />
    </head>
    <body>
        <div class="container">

            <h1><i class="icon-power-off warning"></i> Error</h1>

            <p class="lead">We're sorry, but an unhandled error occurred. Please see the details below.</p>

            <div class="exception-name-block">
                <div><?= e($exception->getMessage()) ?></div>
                <p><?= $exception->getNiceFile() ?> <span>line</span> <?= $exception->getLine() ?></p>
            </div>

            <ul class="indicators">
                <li>
                    <h3>Type</h3>
                    <p><?= e($exception->getErrorType()) ?></p>
                </li>
                <li>
                    <h3>Exception</h3>
                    <p><?= e($exception->getClassName()) ?></p>
                </li>
            </ul>

            <pre class="brush: php"><?php foreach ($exception->getHighlightLines() as $line): ?><?= $line ?><?php endforeach ?></pre>

            <h3><i class="icon-code-fork warning"></i> Stack Trace</h3>

            <table class="data-table">
                <thead>
                    <tr>
                        <th class="right">#</th>
                        <th>Called Code</th>
                        <th>Document</th>
                        <th class="right">Line</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($exception->getCallStack() as $stackItem): ?>
                        <tr>
                            <td class="right"><?= $stackItem->id ?></td>
                            <td>
                                <?= $stackItem->code ?>(<?php if ($stackItem->args): ?><abbr title="<?= $stackItem->args ?>">&hellip;</abbr><?php endif ?>)
                            </td>
                            <td class="file-column"><?= $stackItem->file ?></td>
                            <td class="right"><?= $stackItem->line ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <script>
            function hotloadHighlightSnippet() {
                var allScripts = document.querySelectorAll('script[src]')
                    currentCount = allScripts.length;

                allScripts.forEach(function(script) {
                    script.addEventListener('load', function() {
                        if (--currentCount === 0) {
                            highlightSnippet();
                        }
                    });
                });
            }

            var highlighted = false;
            function highlightSnippet() {
                if (typeof SyntaxHighlighter !== 'undefined' || highlighted) {
                    SyntaxHighlighter.defaults['toolbar'] = false;
                    SyntaxHighlighter.defaults['quick-code'] = false;
                    SyntaxHighlighter.defaults['html-script'] = true;
                    SyntaxHighlighter.defaults['first-line'] = <?= $exception->getHighlight()->startLine+1 ?>;
                    SyntaxHighlighter.defaults['highlight'] = <?= $exception->getLine() ?>;
                    SyntaxHighlighter.highlight();
                    highlighted = true;
                }
            }

            delete require;
            window.addEventListener('load', highlightSnippet);
            hotloadHighlightSnippet();
        </script>
    </body>
</html>

<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_6f040e19f04780774eca56bf6dc3af78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_ead79a10472ad896b85c924682366888ef282041"] = $this;
        // line 5
        if ((!array_key_exists("colors", $context))) {
            // line 6
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "events"))) ? (sprintf("%.0f ms", $this->getAttribute($this->getContext($context, "collector"), "duration"))) : ("n/a"));
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        <img width=\"16\" height=\"28\" alt=\"Time\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=\"/>
        <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "duration"), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "duration"), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAACz0lEQVR42t2XXWhSYRjHc+pyWrC10e66qKggiGoF0Qh1SBPFDxCcX00yrG6EImFsRhAuvUjwQgZB1EUICYEkgRJGB0QmKMNGEYx1URYEg2w6amWY/YUXXH7Ms9M5RAk/PByf8/58P573ec+2Wq32V/g3xFKpdB3UQBV8JVTJvXUuxbXN+P96TODNzMzsNJvNo3UCgYCYszmmKKrPYrE4NBrNU7lcvtY8xGNjYyWtVvvEZrPZES9kQyy02+3nx8fH3xFJV5RK5RuHw2GqP8tInEgk+g0GwyN6wlZMJtPdfD6/Y0viVCo1iKHLMpM20Ov1FNqT0BWLsWhiXdImDyiQ7ybHVN1HnKibWHgNHxr5egXI6t90ej49PX0BsYKO4qWlpT1qtXqFhlhGnpHREWPaPiB2dydxL/7ZTRLMnpjg8/lcpNct4mGr1fqSK7HT6UwhfleLuFwuH1EoFBWuxDqd7jPiDzSLe+Lx+AQJYl9MKBQKZ+pb7kaxKBKJXGUgPgqCgGrQOc3S6fQEfuNvFEtisdgUA3E/kcsadE6zhYUFG9lKG2LcvMxA3EKnKUBx+bm6uqptFvcCtUql+kECWcdoNH6BQw56fltcYNTtdr/nSuzxeJbhONkujw9Fo9EYV+JkMvkAjv3txEOVSuUSytk3tqWoz2to/xwYaCcWgtPI5+dsSrGo6mn0GG2PtG6ZDYbBRb/f/5EtcSgUeos2J8HgpmURHMaQz6JglP5U6vV6P6G962Sr5HcUE/rAKXB7bm5uhenwhsPheim8BUa6HwQaSMjSv5HNZl+gstDOb5fL9X1xcTGLZ6fAMSDe6ilTBA4CO7iXyWReB4PBMo5F1WYZymkVc1nK5XKvEHsHWMA+sJ3p8VYAhkjvJ4EPRMCzYrE4XyqV5nGdBA/BLLCC46Tu8tl4kxCAAdKLE0AGzhKkZB73kqIh4PI1lQf4BB6TNn4B8KR3FN9bp4MAAAAASUVORK5CYII=\" alt=\"Timeline\" /></span>
    <strong>Timeline</strong>
</span>
";
    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        // line 41
        echo "    <h2>Timeline</h2>
    ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "events"))) {
            // line 43
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 51
    public function block_panelContent($context, array $blocks = array())
    {
        // line 52
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\" />
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($this->getContext($context, "collector"), "duration")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($this->getContext($context, "collector"), "inittime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"1\" min=\"0\" /> ms</td>
            </tr>
        </table>
    </form>

    <h3>
        ";
        // line 71
        echo (($this->getAttribute($this->getContext($context, "profile"), "parent")) ? ("Request") : ("Main Request"));
        echo "
        <small>
            - ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "duration"), "html", null, true);
        echo " ms
            ";
        // line 74
        if ($this->getAttribute($this->getContext($context, "profile"), "parent")) {
            // line 75
            echo "                - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($this->getContext($context, "profile"), "parent"), "token"), "panel" => "time")), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 77
        echo "        </small>
    </h3>

    ";
        // line 80
        echo $context["__internal_ead79a10472ad896b85c924682366888ef282041"]->getdisplay_timeline(("timeline_" . $this->getContext($context, "token")), $this->getAttribute($this->getContext($context, "collector"), "events"), $this->getContext($context, "colors"));
        echo "

    ";
        // line 82
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "children"))) {
            // line 83
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "profile"), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 84
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($this->getContext($context, "child"), "getcollector", array(0 => "time"), "method"), "events");
                // line 85
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "child"), "token"), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "child"), "getcollector", array(0 => "request"), "method"), "requestattributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "events"), "__section__"), "duration"), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 90
                echo $context["__internal_ead79a10472ad896b85c924682366888ef282041"]->getdisplay_timeline(("timeline_" . $this->getAttribute($this->getContext($context, "child"), "token")), $this->getContext($context, "events"), $this->getContext($context, "colors"));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 92
            echo "    ";
        }
        // line 93
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                }

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            }
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param  string selector a CSS-selector-compatible query string.
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors  = ";
        // line 136
        echo twig_jsonencode_filter($this->getContext($context, "colors"));
        echo ",
                _storagePrefix  = 'timeline/',
                _threshold      = 1,
                _requests       = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is.
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is.
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds).
             * @param width     the width of the canvas.
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId    = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent  = 38,
                    colors = _drawingColors,
                    space  = 10.5,
                    ratio  = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx    = canvas.getContext(\"2d\");

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                canvas.width  = width;
                canvas.height = canvasHeight;

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#dfdfdf\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            ctx.fillStyle = colors.child_sections;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return ! isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle   = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle   = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle   = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if ( ! isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#dfdfdf\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \" ~ \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / ~ \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"12px sans-serif\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"10px sans-serif\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width     = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (threshold === null) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        };

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 389
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "endtime")), "html", null, true);
        echo ",
            \"requests\": [
";
        // line 391
        echo $context["__internal_ead79a10472ad896b85c924682366888ef282041"]->getdump_request_data($this->getContext($context, "token"), $this->getContext($context, "profile"), $this->getAttribute($this->getContext($context, "collector"), "events"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "origin"));
        echo "

";
        // line 393
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "children"))) {
            // line 394
            echo "                ,
";
            // line 395
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "profile"), "children"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 396
                echo $context["__internal_ead79a10472ad896b85c924682366888ef282041"]->getdump_request_data($this->getAttribute($this->getContext($context, "child"), "token"), $this->getContext($context, "child"), $this->getAttribute($this->getAttribute($this->getContext($context, "child"), "getcollector", array(0 => "time"), "method"), "events"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "origin"));
                echo (($this->getAttribute($this->getContext($context, "loop"), "last")) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 399
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl  = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize                 = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick  = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup  = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]></script>
";
    }

    // line 434
    public function getdump_request_data($_token = null, $_profile = null, $_events = null, $_origin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $_token,
            "profile" => $_profile,
            "events" => $_events,
            "origin" => $_origin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 435
            $context["__internal_3d8ef04a57efc8e3572fa28511402ce0d93e504a"] = $this;
            // line 436
            echo "                {
                    \"id\": \"";
            // line 437
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\",
                    \"left\": ";
            // line 438
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute($this->getContext($context, "events"), "__section__"), "origin") - $this->getContext($context, "origin"))), "html", null, true);
            echo ",
                    \"events\": [
";
            // line 440
            echo $context["__internal_3d8ef04a57efc8e3572fa28511402ce0d93e504a"]->getdump_events($this->getContext($context, "events"));
            echo "
                    ]
                }
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 445
    public function getdump_events($_events = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $_events,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 446
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "events"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 447
                if (("__section__" != $this->getContext($context, "name"))) {
                    // line 448
                    echo "                        {
                            \"name\": \"";
                    // line 449
                    echo twig_escape_filter($this->env, strtr($this->getContext($context, "name"), array("\\" => "\\\\")), "html", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 450
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "category"), "html", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 451
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getContext($context, "event"), "origin")), "html", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 452
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getContext($context, "event"), "starttime")), "html", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 453
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getContext($context, "event"), "endtime")), "html", null, true);
                    echo ",
                            \"duration\": ";
                    // line 454
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getContext($context, "event"), "duration")), "html", null, true);
                    echo ",
                            \"memory\": ";
                    // line 455
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($this->getContext($context, "event"), "memory") / 1024) / 1024)), "html", null, true);
                    echo ",
                            \"periods\": [";
                    // line 457
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "event"), "periods"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 458
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getContext($context, "period"), "starttime")), "html", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getContext($context, "period"), "endtime")), "html", null, true);
                        echo "}";
                        echo (($this->getAttribute($this->getContext($context, "loop"), "last")) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 460
                    echo "]
                        }";
                    // line 461
                    echo (($this->getAttribute($this->getContext($context, "loop"), "last")) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 466
    public function getdisplay_timeline($_id = null, $_events = null, $_colors = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "events" => $_events,
            "colors" => $_colors,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 467
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 469
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "colors"));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 470
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "color"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "category"), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 472
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 473
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  196 => 92,  182 => 87,  176 => 86,  173 => 85,  170 => 84,  163 => 82,  68 => 30,  62 => 27,  28 => 3,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  309 => 108,  306 => 107,  300 => 105,  297 => 104,  291 => 102,  283 => 100,  278 => 98,  274 => 97,  263 => 95,  258 => 94,  224 => 81,  136 => 71,  122 => 41,  117 => 39,  112 => 36,  109 => 52,  104 => 32,  85 => 24,  75 => 19,  58 => 25,  44 => 20,  178 => 66,  175 => 65,  161 => 63,  158 => 80,  154 => 60,  125 => 42,  121 => 50,  118 => 49,  87 => 41,  49 => 11,  46 => 10,  27 => 3,  91 => 33,  63 => 18,  385 => 160,  382 => 159,  374 => 157,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  324 => 113,  322 => 138,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  199 => 93,  193 => 69,  190 => 76,  187 => 75,  180 => 63,  174 => 65,  171 => 58,  166 => 56,  159 => 53,  151 => 59,  148 => 46,  143 => 51,  140 => 58,  107 => 27,  103 => 25,  100 => 39,  97 => 23,  88 => 25,  82 => 28,  76 => 34,  61 => 15,  39 => 6,  36 => 5,  79 => 21,  72 => 18,  69 => 17,  54 => 22,  47 => 21,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  246 => 32,  164 => 58,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  120 => 40,  115 => 39,  111 => 47,  108 => 37,  106 => 51,  101 => 31,  98 => 45,  92 => 43,  83 => 33,  80 => 32,  74 => 14,  66 => 11,  60 => 6,  55 => 24,  52 => 12,  50 => 22,  41 => 19,  32 => 6,  29 => 6,  409 => 183,  400 => 180,  396 => 179,  393 => 178,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  362 => 161,  355 => 157,  348 => 153,  341 => 118,  334 => 145,  327 => 114,  312 => 109,  305 => 129,  298 => 125,  293 => 118,  288 => 101,  285 => 115,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 92,  240 => 92,  235 => 85,  229 => 87,  221 => 85,  219 => 84,  209 => 78,  202 => 77,  195 => 71,  191 => 67,  188 => 90,  185 => 74,  177 => 64,  172 => 64,  168 => 57,  165 => 83,  162 => 54,  156 => 62,  153 => 77,  150 => 55,  147 => 75,  141 => 73,  134 => 54,  130 => 39,  123 => 61,  119 => 40,  116 => 57,  113 => 48,  105 => 34,  102 => 40,  99 => 31,  96 => 37,  90 => 42,  84 => 40,  81 => 23,  73 => 33,  70 => 15,  67 => 24,  64 => 23,  59 => 14,  53 => 12,  45 => 9,  43 => 12,  38 => 18,  35 => 6,  33 => 4,  30 => 5,);
    }
}

<?php Rec\Helper\Partial::render('_header.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <form action="/relify" method="post">
                    <fieldset>
                        <legend>Legend</legend>
                        <label>Label name</label>
                        <input type="text" placeholder="Type something…" name="input1"><label>Label name</label>
                        <input type="text" placeholder="Type something…" name="input2"><label>Label name</label>
                        <input type="text" placeholder="Type something…" name="input3">
                        <span class="help-block">Example block-level help text here.</span>
                        <label class="checkbox">
                            <input type="checkbox"> Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php Rec\Helper\Partial::render('_footer.php'); ?>
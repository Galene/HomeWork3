    <div id="footer-outer">

        <?php if ($showbottom) : ?>
            <div id="footer-inner">

                <div id="bottom">
                    <?php if ($this->countModules('position-9')): ?>
                        <div class="box box1"> <jdoc:include type="modules" name="position-9" style="xhtml" headerlevel="3" /></div>
                    <?php endif; ?>
                    <?php if ($this->countModules('position-10')): ?>
                        <div class="box box2"> <jdoc:include type="modules" name="position-10" style="xhtml" headerlevel="3" /></div>
                    <?php endif; ?>
                    <?php if ($this->countModules('position-11')): ?>
                        <div class="box box3"> <jdoc:include type="modules" name="position-11" style="xhtml" headerlevel="3" /></div>
                    <?php endif ; ?>
                </div>
            </div>
        <?php endif ; ?>

        <div id="footer-sub">

            <?php if (!$templateparams->get('html5', 0)): ?>
            <div id="footer">
                <?php else: ?>
                <footer id="footer">
                    <?php endif; ?>

                    <jdoc:include type="modules" name="position-14" />
                    <p>
                        <?php echo JText::_('JText pos-14');?> <a href="http://www.joomla.org/">Joomla!&#174;</a>
                    </p>

                    <?php if (!$templateparams->get('html5', 0)): ?>
            </div><!-- end footer -->
        <?php else: ?>
            </footer>
        <?php endif; ?>

        </div>

    </div>
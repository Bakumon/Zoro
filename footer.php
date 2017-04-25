<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
    ·<?php _e(' <a href="https://www.bakumon.me/about.html">关于我</a>'); ?>
    ·<?php _e(' <a href="https://www.bakumon.me/links.html">友链</a>'); ?>
</footer><!-- end #footer -->
<!-- 添加统计代码 -->
<?php $this->options->analyticsCode() ?>
<?php $this->footer(); ?>
</body>
</html>

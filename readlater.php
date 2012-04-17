<?php

function readlater($content, $tool) {

  $url    = url::current();
  $title  = $content;

  $defaults = array(
    'instapaper'  => 'Add to Instapaper',
    'pocket'      => 'Save to Pocket',
  );

  if ($tool === 'instapaper') {
    echo '<a href="http://www.instapaper.com/hello2?url=' . $url . '&title=' . $title . '" title="">' . $defaults[instapaper] . '</a>';
  }

  elseif ($tool === 'pocket') {
    echo '<a href="https://getpocket.com/save?url=' . $url . '&title=' . $title . '" title="">' . $defaults[pocket] . '</a>';
  }

}
?>

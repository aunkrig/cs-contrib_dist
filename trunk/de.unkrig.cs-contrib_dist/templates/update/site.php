<?php
header('Content-type: text/xml');
?>
<?= "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" ?>

<site>
<?php
foreach (glob("features/*_*.jar") as $filename) {
    if (ereg('^.*/(.*)_(.*)\.jar$', $filename, $groups)) {
        $id      = $groups[1];
        $version = $groups[2];
?>
   <feature url="<?= $filename ?>" id="<?= $id ?>" version="<?= $version ?>">
      <category name="de.unkrig.cs-contrib"/>
   </feature>
<?php
    }
}
?>
   <category-def name="de.unkrig.cs-contrib" label="cs-contrib"/>
</site>

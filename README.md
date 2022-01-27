## Setting up ##

To build the cs-contrib ECLIPSE plug-in, several manual steps need to be done.

Decide which version of `cs-contrib` to use.

Then, copy the required `.jar` files to the `libs` directory, typically:

    cs-contrib-*.jar
    commons-lang-*.jar
    commons-nullanalysis-*.jar
    doclet-cs-*-jar-with-dependencies.jar
    doclet-cs-annotation-*.jar

Then run

    launch/de.unkrig.cs-contrib_dist build.ant build.launch
    launch/de.unkrig.cs-contrib_dist build.ant build.publish

, and it will tell you the detailed steps that are required.

<?
### Pull some default data ###
libxml_use_internal_errors(true); # Suppress any warnings from xml errors.
$docroot = $docroot ?? $_SERVER['DOCUMENT_ROOT'] ?: '/usr/local/emhttp';
$pluginRoot = "$docroot/plugins/$scriptName";


### Pull in plugin settings ###
# Using a JSON file...
$settings = json_decode(file_get_contents('"$docroot/plugins/$scriptName/settings.json"'));
## echo $settings->database->host; // Output: localhost

# Using a INI file...
# $defaults = @parse_ini_file("$docroot/plugins/$scriptName/default.cfg", true) ?: [];


### Base DummyPlg Class ###
class DummyCore {

    private $dummyPlgState;
    private $dummyPlgData = [];
  
    public function __construct(string filePath) {
        if ($loadPath == "") {
            $this->dummyPlgData["creation_date"] = time();
        } else {
            // (To)Do - Build out core data load workflow...
        }
        
    }

    public function SaveCoreData(string filePath) {
        // (To)Do - Build out core data save workflow...

    }

    # Getter to return Plugin State
    public function GetPluginState() {
        return $this->dummyPlgState;
        
    }

}


?>
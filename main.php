<?php
class symfony_yaml_container{
    //public static function command($line):void{}
    public static function init():void{
        require_once 'packages/symfony_yaml_container/files/vendor/autoload.php';
    }

    /**
     * Parses a YAML file into a PHP value.
     *
     * Usage:
     *
     *     $array = Yaml::parseFile('config.yml');
     *     print_r($array);
     *
     * @param string                     $filename The path to the YAML file to be parsed
     * @param int-mask-of<self::PARSE_*> $flags    A bit field of PARSE_* constants to customize the YAML parser behavior
     */
    public static function parseFile(string $filename, int $flags=0):mixed{
        try{
            return \Symfony\Component\Yaml\Yaml::parseFile($filename, $flags);
        }
        catch(\Symfony\Component\Yaml\Exception\ParseException $e){
            return false;
        }
    }

    /**
     * Parses YAML into a PHP value.
     *
     *  Usage:
     *  <code>
     *   $array = Yaml::parse(file_get_contents('config.yml'));
     *   print_r($array);
     *  </code>
     *
     * @param string                     $input A string containing YAML
     * @param int-mask-of<self::PARSE_*> $flags A bit field of PARSE_* constants to customize the YAML parser behavior
     */
    public static function parse(string $input, int $flags=0):mixed{
        try{
            return \Symfony\Component\Yaml\Yaml::parse($input, $flags);
        }
        catch(\Symfony\Component\Yaml\Exception\ParseException $e){
            return false;
        }
    }

    /**
     * Dumps a PHP value to a YAML string.
     *
     * The dump method, when supplied with an array, will do its best
     * to convert the array into friendly YAML.
     *
     * @param mixed                     $input  The PHP value
     * @param int                       $inline The level where you switch to inline YAML
     * @param int                       $indent The amount of spaces to use for indentation of nested nodes
     * @param int-mask-of<self::DUMP_*> $flags  A bit field of DUMP_* constants to customize the dumped YAML string
     */
    public static function dump(mixed $input, int $inline=2, int $indent=4, int $flags=0):string|false{
        try{
            return \Symfony\Component\Yaml\Yaml::dump($input, $inline=2, $indent=4, $flags=0);
        }
        catch(\Symfony\Component\Yaml\Exception\ParseException $e){
            return false;
        }
    }
}
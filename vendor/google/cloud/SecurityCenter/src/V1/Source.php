<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/source.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud Security Command Center's (Cloud SCC) finding source. A finding source
 * is an entity or a mechanism that can produce a finding. A source is like a
 * container of findings that come from the same scanner, logger, monitor, etc.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Source</code>
 */
class Source extends \Google\Protobuf\Internal\Message
{
    /**
     * The relative resource name of this source. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/123/sources/456"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The source’s display name.
     * A source’s display name must be unique amongst its siblings, for example,
     * two sources with the same parent can't share the same display name.
     * The display name must start and end with a letter or digit, may contain
     * letters, digits, spaces, hyphens, and underscores, and can be no longer
     * than 32 characters. This is captured by the regular expression:
     * [\p{L}\p{N}]({\p{L}\p{N}_- ]{0,30}[\p{L}\p{N}])?.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * The description of the source (max of 1024 characters).
     * Example:
     * "Cloud Security Scanner is a web security scanner for common
     * vulnerabilities in App Engine applications. It can automatically
     * scan and detect four common vulnerabilities, including cross-site-scripting
     * (XSS), Flash injection, mixed content (HTTP in HTTPS), and
     * outdated/insecure libraries."
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The relative resource name of this source. See:
     *           https://cloud.google.com/apis/design/resource_names#relative_resource_name
     *           Example:
     *           "organizations/123/sources/456"
     *     @type string $display_name
     *           The source’s display name.
     *           A source’s display name must be unique amongst its siblings, for example,
     *           two sources with the same parent can't share the same display name.
     *           The display name must start and end with a letter or digit, may contain
     *           letters, digits, spaces, hyphens, and underscores, and can be no longer
     *           than 32 characters. This is captured by the regular expression:
     *           [\p{L}\p{N}]({\p{L}\p{N}_- ]{0,30}[\p{L}\p{N}])?.
     *     @type string $description
     *           The description of the source (max of 1024 characters).
     *           Example:
     *           "Cloud Security Scanner is a web security scanner for common
     *           vulnerabilities in App Engine applications. It can automatically
     *           scan and detect four common vulnerabilities, including cross-site-scripting
     *           (XSS), Flash injection, mixed content (HTTP in HTTPS), and
     *           outdated/insecure libraries."
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Source::initOnce();
        parent::__construct($data);
    }

    /**
     * The relative resource name of this source. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/123/sources/456"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The relative resource name of this source. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/123/sources/456"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The source’s display name.
     * A source’s display name must be unique amongst its siblings, for example,
     * two sources with the same parent can't share the same display name.
     * The display name must start and end with a letter or digit, may contain
     * letters, digits, spaces, hyphens, and underscores, and can be no longer
     * than 32 characters. This is captured by the regular expression:
     * [\p{L}\p{N}]({\p{L}\p{N}_- ]{0,30}[\p{L}\p{N}])?.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The source’s display name.
     * A source’s display name must be unique amongst its siblings, for example,
     * two sources with the same parent can't share the same display name.
     * The display name must start and end with a letter or digit, may contain
     * letters, digits, spaces, hyphens, and underscores, and can be no longer
     * than 32 characters. This is captured by the regular expression:
     * [\p{L}\p{N}]({\p{L}\p{N}_- ]{0,30}[\p{L}\p{N}])?.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The description of the source (max of 1024 characters).
     * Example:
     * "Cloud Security Scanner is a web security scanner for common
     * vulnerabilities in App Engine applications. It can automatically
     * scan and detect four common vulnerabilities, including cross-site-scripting
     * (XSS), Flash injection, mixed content (HTTP in HTTPS), and
     * outdated/insecure libraries."
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the source (max of 1024 characters).
     * Example:
     * "Cloud Security Scanner is a web security scanner for common
     * vulnerabilities in App Engine applications. It can automatically
     * scan and detect four common vulnerabilities, including cross-site-scripting
     * (XSS), Flash injection, mixed content (HTTP in HTTPS), and
     * outdated/insecure libraries."
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}


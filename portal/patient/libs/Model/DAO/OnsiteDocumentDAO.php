<?php

/**
 * OnsiteDocumentDAO.php
 *
 * @package   OpenEMR
 * @link      https://www.open-emr.org
 * @author    Jerry Padgett <sjpadgett@gmail.com>
 * @copyright Copyright (c) 2016-2017 Jerry Padgett <sjpadgett@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("OnsiteDocumentMap.php");

/**
 * OnsiteDocumentDAO provides object-oriented access to the onsite_documents table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Openemr::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class OnsiteDocumentDAO extends Phreezable
{
    /** @var int */
    public $Id;

    /** @var int */
    public $Pid;

    /** @var int */
    public $Facility;

    /** @var int */
    public $Provider;

    /** @var int */
    public $Encounter;

    /** @var timestamp */
    public $CreateDate;

    /** @var string */
    public $DocType;

    /** @var int */
    public $PatientSignedStatus;

    /** @var date */
    public $PatientSignedTime;

    /** @var date */
    public $AuthorizeSignedTime;

    /** @var int */
    public $AcceptSignedStatus;

    /** @var string */
    public $AuthorizingSignator;

    /** @var date */
    public $ReviewDate;

    /** @var string */
    public $DenialReason;

    /** @var string */
    public $AuthorizedSignature;

    /** @var string */
    public $PatientSignature;

    /** @var blob */
    public $FullDocument;

    /** @var string */
    public $FileName;

    /** @var string */
    public $FilePath;

    /** @var string */
    public $TemplateData;
}

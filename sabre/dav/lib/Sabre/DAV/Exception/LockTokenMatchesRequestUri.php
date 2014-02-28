<?php

/**
 * LockTokenMatchesRequestUri
 *
 * This exception is thrown by UNLOCK if a supplied lock-token is invalid
 *
 * @package Sabre
 * @subpackage DAV
 * @copyright Copyright (C) 2007-2014 fruux GmbH (https://fruux.com/).
 * @author Evert Pot (http://evertpot.com/)
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
class Sabre_DAV_Exception_LockTokenMatchesRequestUri extends Sabre_DAV_Exception_Conflict {

    /**
     * Creates the exception
     */
    public function __construct() {

        $this->message = 'The locktoken supplied does not match any locks on this entity';

    }

    /**
     * This method allows the exception to include additional information into the WebDAV error response
     *
     * @param Sabre_DAV_Server $server
     * @param DOMElement $errorNode
     * @return void
     */
    public function serialize(Sabre_DAV_Server $server,DOMElement $errorNode) {

        $error = $errorNode->ownerDocument->createElementNS('DAV:','d:lock-token-matches-request-uri');
        $errorNode->appendChild($error);

    }

}

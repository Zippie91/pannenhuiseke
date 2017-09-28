$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    
    $('#game-modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var game = button.data('game');
        var location = button.data('location');
        
        var modal = $(this);
        
        modal.find('.modal-title').text(game['team_home'] + ' - ' + game['team_away']);
        
        ModalBody(game, location, modal.find('.modal-body'));
    });
});

function ModalBody(gameData, locationData, body) {
    if (gameData['division'] == null) {
        body.find('.modal-afdeling').hide();
    } else {
        body.find('p.modal-afdeling').html(gameData['division']);
    }
    
    if (gameData['datetime'] == null) {
        body.find('.modal-tijdstip').hide();
    } else {
        body.find('p.modal-tijdstip').html(gameData['day'] + ' ' + gameData['datetime']);
    }
    
    if (gameData['location'] == null) {
        body.find('.modal-locatie').hide();
    } else {
        ModalLocation(locationData, body.find('p.modal-locatie'));
    }
    
    if (gameData['result'] === "<span class=\"score\"></span>") {
        body.find('.modal-uitslag').hide();
    } else {
        body.find('p.modal-uitslag').html(gameData['result']);
    }
    
    body.find('p.modal-afdeling').find('span').attr('data-toggle', 'tooltip').attr('data-placement', 'left').tooltip();
}

function ModalLocation(locationData, location) {
    if (locationData['naam'] === null) {
        location.find('.modal-location-name').parent().hide();
    } else {
        location.find('.modal-location-name').html(locationData['naam']);
    }
    
    if (locationData['adres'] === null) {
        location.find('.modal-location-address').parent().hide();
    } else {
        location.find('.modal-location-address').html(BuildAddress(locationData['adres']));    
    }
    
    if (locationData['tel'] == null) {
        location.find('.modal-location-telephone').parent().hide();
    } else {
        location.find('.modal-location-telephone').html(locationData['tel']);    
    }
    
    if (locationData['telcafe'] == null) {
        location.find('.modal-location-cafetaria').parent().hide();
    } else {
        location.find('.modal-location-cafetaria').html(locationData['telcafe']);    
    }
    
    if (locationData['opmerking'] == null) {
        location.find('.modal-location-notes').parent().hide();
    } else {
        location.find('.modal-location-notes').html(locationData['opmerking']);    
    }
}

function BuildAddress(addressData) {
    var addressString = "";
    
    if (addressData['straat'] != null) {
        addressString += addressData['straat'];
    }
    
    if (addressData['nummer'] != null) {
        addressString += " " + addressData['nummer'];
    }
    
    addressString += ", " + BuildTown(addressData['gemeente']);
    
    return addressString;
}

function BuildTown(townData) {
    var townString = "";
    
    if (townData['postcode'] != null) {
        townString += townData['postcode'] + " ";
    }
    
    if (townData['naam'] != null) {
        townString += townData['naam'];
    }
    
    return townString;
}
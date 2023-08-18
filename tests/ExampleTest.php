<?php



it('can test', function () {
    expect(true)->toBeTrue();
});

it('tables', function (){
    $tables = ['towar','cena'];
    $gastro = new Marcincook\Gastro\Gastro();
    $gastro->setTables($tables);

    expect($gastro->tables == $tables)->toBeTrue();
});

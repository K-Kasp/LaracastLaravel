describe('Gallery Document CURD', () => {

    beforeEach(() => {

        cy.visit('/login');
        
        // we should be redirected to /login
        cy.url().should('include', '/login');

        cy.get('input[name=email]').type('seller@example.com');

        // {enter} causes the form to submit
        cy.get('input[name=password]').type(`123456{enter}`);

        // we should be redirected to /dashboard
        cy.url().should('include', '/dashboard');

        cy.visit('/documentgallery');
      
        // we should be redirected to /documentgallery
        cy.url().should('include', '/documentgallery');
    })

    it('Create New Gallery', () => {        
        // This should be a parent element of form that we are targeting
        const formTarget = '#gallery-form';

        // input gallery name in text field
        cy.get(formTarget + ' input[name=name]')
            .should('be.visible')
            .type('cypress test gallery 1')

        //// open file dialog to choose gallery images
        cy.get(formTarget + ' [name=photos]')
            .parent()
            .click()
        cy.get('#aizUploaderModal').should('be.visible')
        // choose files on file dialog
        cy.get('.aiz-file-box-wrap')
            .first()
            .should('be.visible')
            .click()
        cy.get('.aiz-file-box-wrap')
            .eq(1)
            .should('be.visible')
            .click()
        // file dialog close on user click on add files button
        cy.get('[data-toggle=aizUploaderAddSelected]')
            .should('be.visible')
            .click()
        cy.get('#aizUploaderModal').should('not.be.visible')

        //// open file dialog to choose thumbnail image
        cy.get(formTarget + ' [name=thumbnail_img]')
            .parent()
            .click()
        cy.get('#aizUploaderModal').should('be.visible')
        // choose file on file dialog
        cy.get('.aiz-file-box-wrap')
            .first()
            .should('be.visible')
            .click()
        // file dialog close on user click on add files button
        cy.get('[data-toggle=aizUploaderAddSelected]')
            .should('be.visible')
            .click()
        cy.get('#aizUploaderModal').should('not.be.visible')

        // input gallery description in textarea
        cy.get(formTarget + ' textarea[name=description]')
            .should('not.be.visible')
            .type('cypress test gallery 1 description', {force: true})

        cy.get(formTarget + ' button[type=submit]').first().click();

        // we should be redirected to /documentgallery
        cy.url().should('include', '/documentgallery');

    });

    it('Create New Document', () => {
        // This should be a parent element of form that we are targeting
        const formTarget = '#document-form';

        // input gallery name in text field
        cy.get(formTarget + ' input[name=name]')
            .should('be.visible')
            .type('cypress test document 1')

        //// open file dialog to choose document file
        cy.get(formTarget + ' [name=document_file]')
            .parent()
            .click()
        cy.get('#aizUploaderModal').should('be.visible')
        // choose file on file dialog
        cy.get('.aiz-file-box-wrap')
            .first()
            .should('be.visible')
            .click()
        // file dialog close on user click on add files button
        cy.get('[data-toggle=aizUploaderAddSelected]')
            .should('be.visible')
            .click()
        cy.get('#aizUploaderModal').should('not.be.visible')

        // input gallery description in textarea
        cy.get(formTarget + ' textarea[name=description]')
            .should('not.be.visible')
            .type('cypress test document 1 description', {force: true})

        cy.get(formTarget + ' button[type=submit]').first().click();

        // we should be redirected to /documentgallery
        cy.url().should('include', '/documentgallery');

    });

})
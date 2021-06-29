
describe('Managing Attributes as a company', () => {
  
    it('Shows seller attribute page in admin panel', () => {
        cy.visit('/login');

        cy.get('input[name=email]').type('seller@eim.solutions');

        // {enter} causes the form to submit
        cy.get('input[name=password]').type(`123456{enter}`);

        // we should be redirected to /admin
        cy.url().should('include', '/dashboard');

        // redirect to seller attribute page
        cy.visit('/attributes');
        cy.url().should('include', '/attributes');

        //select country
        cy.get('select[name=1]')
            .select('United States', {force: true})
            .should('have.value', 'US');        
        
        //check checkbox
        cy.get('.aiz-square-check').last().click();
        
        //input company size number
        cy.get('input#plain_text_3').clear().type('800');

        //select dropdown attribute
        cy.get('select#dropdown_4')
            .select('dropdown option 5', {force: true})
            .should('have.value', 13);

        //input text attribute
        cy.get('input#plain_text_5').clear().type('cypress text attribute');

        //click update attributes button
        cy.get('button[type=submit]').contains('Update Attributes').click();

        cy.url().should('include', '/attributes');
    })
  
})
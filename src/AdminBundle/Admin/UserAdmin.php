<?php
namespace AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of Administrator
 *
 * @author thaer
 */
class UserAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username')
//            ->add('username_canonical')
            ->add('email')
//            ->add('email_canonical')
//            ->add('salt')
            ->add('password')
            ->add('roles')
            ->add('locked', 'choice',
    array('choices' => array(
                'false' => 'actif',
                'true' => 'inactif',

       )))

                
   //         ->add('expiredAt')  
//            ->add('confirmation_token')
//            ->add('password_requested_at')
//            ->add('credentials_expired')
//            ->add('credentials_expire_at')
  

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('username')
//            ->add('username_canonical')
            ->add('email')
//            ->add('email_canonical')
//            ->add('salt')
            ->add('password')
//            ->add('last_login')
            ->add('locked')
            ->add('expired')
//            ->add('expires_at')  
//            ->add('confirmation_token')
//            ->add('password_requested_at')
//            ->add('credentials_expired')
//            ->add('credentials_expire_at')
             ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
              ->add('username')
//            ->add('username_canonical')
            ->add('email')
//            ->add('email_canonical')
//            ->add('salt')
            ->add('password')
//            ->add('last_login')
  
//            ->add('expires_at')  
//            ->add('confirmation_token')
//            ->add('password_requested_at')
->add('rolesAsString', 'string')
                            ->add('lastLogin')
         
                ->add('locked')
            ->add('expired')
//            ->add('credentials_expired')
//            ->add('credentials_expire_at')
                 ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
                    ))
                ;
    }
}

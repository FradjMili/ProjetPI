<?php

namespace TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function DashboardAction()
    {
        return $this->render('TemplateBundle:Dashboard:dashboard.html.twig', array(
            // ...
        ));
    }

    public function ContractAction()
    {
        return $this->render('TemplateBundle:Dashboard:contract.html.twig', array(
            // ...
        ));
    }

    public function JobpastedAction()
    {
        return $this->render('TemplateBundle:Dashboard:jobpasted.html.twig', array(
            // ...
        ));
    }

    public function AddJobAction()
    {
        return $this->render('TemplateBundle:Dashboard:add_job.html.twig', array(
            // ...
        ));
    }

    public function Your_ProposalsAction()
    {
        return $this->render('TemplateBundle:Dashboard:your-proposals.html.twig', array(
            // ...
        ));
    }

    public function Other_ProposalsAction()
    {
        return $this->render('TemplateBundle:Dashboard:other-proposals.html.twig', array(
            // ...
        ));
    }

    public function OffersAction()
    {
        return $this->render('TemplateBundle:Dashboard:offers.html.twig', array(
            // ...
        ));
    }

    public function CompanyAction()
    {
        return $this->render('TemplateBundle:Dashboard:company.html.twig', array(
            // ...
        ));
    }

    public function AddCompanyAction()
    {
        return $this->render('TemplateBundle:Dashboard:add_company.html.twig', array(
            // ...
        ));
    }

    public function MessagesAction()
    {
        return $this->render('TemplateBundle:Dashboard:messages.html.twig', array(
            // ...
        ));
    }

    public function DepositsAction()
    {
        return $this->render('TemplateBundle:Dashboard:deposits.html.twig', array(
            // ...
        ));
    }

    public function WithdrawalsAction()
    {
        return $this->render('TemplateBundle:Dashboard:withdrawals.html.twig', array(
            // ...
        ));
    }

    public function Payment_MethodAction()
    {
        return $this->render('TemplateBundle:Dashboard:payment-method.html.twig', array(
            // ...
        ));
    }

    public function NembershipAction()
    {
        return $this->render('TemplateBundle:Dashboard:nembership.html.twig', array(
            // ...
        ));
    }

    public function Featured_JobAction()
    {
        return $this->render('TemplateBundle:Dashboard:featured-job.html.twig', array(
            // ...
        ));
    }

    public function Featured_a_JobAction()
    {
        return $this->render('TemplateBundle:Dashboard:featured-a-job.html.twig', array(
            // ...
        ));
    }

    public function Featured_ProfilesAction()
    {
        return $this->render('TemplateBundle:Dashboard:featured-profiles.html.twig', array(
            // ...
        ));
    }

    public function Featured_Your_ProfileAction()
    {
        return $this->render('TemplateBundle:Dashboard:featured-your-profile.html.twig', array(
            // ...
        ));
    }

    public function Featured_CompaniesAction()
    {
        return $this->render('TemplateBundle:Dashboard:featured-companies.html.twig', array(
            // ...
        ));
    }

    public function Featured_Your_CompanyAction()
    {
        return $this->render('TemplateBundle:Dashboard:featured-your-company.html.twig', array(
            // ...
        ));
    }

    public function EditProfileAction()
    {
        return $this->render('TemplateBundle:Dashboard:edit_profile.html.twig', array(
            // ...
        ));
    }

    public function ProfileImageAction()
    {
        return $this->render('TemplateBundle:Dashboard:profile_image.html.twig', array(
            // ...
        ));
    }

    public function PasswordAction()
    {
        return $this->render('TemplateBundle:Dashboard:password.html.twig', array(
            // ...
        ));
    }

    public function ComapnyAction()
    {
        return $this->render('TemplateBundle:Dashboard:comapny.html.twig', array(
            // ...
        ));
    }

    public function WorkroomAction()
    {
        return $this->render('TemplateBundle:Dashboard:workroom.html.twig', array(
            // ...
        ));
    }

}

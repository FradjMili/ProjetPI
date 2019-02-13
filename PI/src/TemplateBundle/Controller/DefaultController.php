<?php

namespace TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function AdminAction()
{
    return $this->render('@Template/Default/Admin.html.twig');
}
    public function indexAction()
    {
        return $this->render('TemplateBundle:Default:index.html.twig');
    }
    public function AddJobAction()
    {
        return $this->render('@Template/Default/PostAjob.html.twig');
    }
    public function DashboardAction()
    {
        return $this->render('@Template/Default/Dashboard.html.twig');
    }
    public function ProfileAction()
    {
        return $this->render('@Template/Default/Profile.html.twig');
    }
    public function EditProfileAction()
    {
        return $this->render('@Template/Default/EditProfile.html.twig');
    }
    public function LoginAction()
    {
        return $this->render('@Template/Default/Login.html.twig');
    }
    public function HomeAction()
    {
        return $this->render('@Template/Default/Home.html.twig');
    }
    public function HireAction()
    {
        return $this->render('@Template/Default/Hire.html.twig');
    }
    public function WorkAction()
    {
        return $this->render('@Template/Default/Work.html.twig');
    }
    public function PricingAction()
    {
        return $this->render('@Template/Default/Pricing.html.twig');
    }
    public function HowAction()
    {
        return $this->render('@Template/Default/How.html.twig');
    }
}

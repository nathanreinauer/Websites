using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Chamber.Controllers
{
    public class ChamberController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }
    }
}
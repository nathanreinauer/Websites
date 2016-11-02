using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Chamber.Entity;

namespace Chamber.Controllers
{
    public class ChamberController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult Members()
        {
            string memberList = MemberList();
            ViewBag.Message = memberList;

            return View();
        }

        public static List<Business> GetBusinesses()
        {
            var db = new BusinessesDbEntities();
            var businesses = db.Businesses.ToList();
            return businesses;
        }

        public string MemberList()
        {
            System.Text.StringBuilder sb = new System.Text.StringBuilder();

            var businesses = GetBusinesses();

            foreach (var business in businesses)
            {
                sb.Append("<li>" + business.Business1 + "</li>");
            }
            
            return sb.ToString();
        }
    }
}
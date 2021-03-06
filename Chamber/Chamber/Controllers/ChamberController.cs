﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Chamber.Entity;
using System.Text;

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
            ViewBag.OddList = MemberList(true);
            ViewBag.EvenList = MemberList(false);

            return View();
        }

        public static List<Business> GetBusinesses(bool isOdd)
        {
            var db = new BusinessesDbEntities();
            List<Business> businesses;

            if(isOdd == true)
            {
                businesses = db.Businesses
                .Where(b => b.Year == 2015 && b.Id % 2 != 0)
                .OrderBy(b => b.Business1)
                .ToList();
            }
            else
            {
                businesses = db.Businesses
                .Where(b => b.Year == 2015 && b.Id % 2 == 0)
                .OrderBy(b => b.Business1)
                .ToList();
            }
            

            return businesses;
        }

        public string MemberList(bool isOdd)
        {
            StringBuilder sb = new StringBuilder();

            var businesses = GetBusinesses(isOdd);

            foreach (var business in businesses)
            {
                if (HasWebsite(business))
                {
                    sb.Append("<li><a href='" + business.Website + "'>" + business.Business1 + "</a></li>");
                }
                else
                {
                    sb.Append("<li>" + business.Business1 + "</li>");
                }
            }
            
            return sb.ToString();
        }

        public bool HasWebsite(Business business)
        {
            bool website = true;

            if (business.Website == null)
            {
                website = false;
            }
            return website;
        }
    }
}
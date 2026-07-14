"use client";

import React, { useRef } from "react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { useGSAP } from "@gsap/react";

import Navbar from "./Navbar";
import HeroSection from "./HeroSection";
import AboutSection from "./AboutSection";
import SkillsSection from "./SkillsSection";
import ProjectsSection from "./ProjectsSection";
import FooterSection from "./FooterSection";

export default function PortfolioSPA() {
  const viewportRef = useRef(null);
  const containerRef = useRef(null);

  useGSAP(
    () => {
      gsap.registerPlugin(ScrollTrigger);

      const mm = gsap.matchMedia();

      mm.add("(min-width: 768px)", () => {
        const panels = gsap.utils.toArray(".panel");
        const container = containerRef.current;
        if (!container || panels.length === 0) return;

        const horizontalTween = gsap.to(panels, {
          xPercent: -100 * (panels.length - 1),
          ease: "none",
          scrollTrigger: {
            trigger: container,
            pin: true,
            scrub: 1.5,
            end: () => "+=" + (container.scrollWidth - window.innerWidth),
            invalidateOnRefresh: true,
          },
        });

        panels.forEach((panel, i) => {
          const title = panel.querySelector(".section-title");
          if (title && i < panels.length - 1) {
            gsap.to(title, {
              x: -260,
              opacity: 0.15,
              ease: "power1.inOut",
              scrollTrigger: {
                trigger: panel,
                containerAnimation: horizontalTween,
                start: "left left",
                end: "right left",
                scrub: true,
              },
            });
          }

          const mainTitle = panel.querySelector(".main-title");
          if (mainTitle) {
            gsap.fromTo(mainTitle,
              { letterSpacing: "0.3em", opacity: 0 },
              {
                letterSpacing: "0em",
                opacity: 1,
                ease: "power2.out",
                scrollTrigger: {
                  trigger: panel,
                  containerAnimation: horizontalTween,
                  start: "left 95%",
                  end: "left 25%",
                  scrub: 1.5,
                },
              }
            );
          }

          const staggerItems = panel.querySelectorAll(".stagger-item");
          if (staggerItems.length) {
            gsap.from(staggerItems, {
              opacity: 0,
              y: 30,
              stagger: 0.15,
              duration: 0.8,
              ease: "power3.out",
              scrollTrigger: {
                trigger: panel,
                containerAnimation: horizontalTween,
                start: "left 80%",
                toggleActions: "play none none reverse",
              },
            });
          }
        });

        const heroSection = container.querySelector("#section-hero");
        if (heroSection) {
          const heroTitle = heroSection.querySelector(".parallax-title");
          if (heroTitle) {
            gsap.to(heroTitle, {
              y: 60,
              ease: "none",
              scrollTrigger: {
                trigger: heroSection,
                containerAnimation: horizontalTween,
                start: "left left",
                end: "right left",
                scrub: 1,
              },
            });
          }
        }

        const contactSection = container.querySelector("#section-contact");
        if (contactSection) {
          const thankTitle = contactSection.querySelector(".thank-title");
          const youTitle = contactSection.querySelector(".you-title");
          if (thankTitle) {
            gsap.fromTo(thankTitle,
              { opacity: 0, y: 40, letterSpacing: "0.2em" },
              {
                opacity: 1, y: 0, letterSpacing: "0em",
                ease: "power3.out",
                scrollTrigger: {
                  trigger: contactSection,
                  containerAnimation: horizontalTween,
                  start: "left 95%",
                  end: "left 60%",
                  scrub: 1.5,
                },
              }
            );
          }
          if (youTitle) {
            gsap.fromTo(youTitle,
              { opacity: 0, y: 40, letterSpacing: "0.2em" },
              {
                opacity: 1, y: 0, letterSpacing: "0em",
                ease: "power3.out",
                scrollTrigger: {
                  trigger: contactSection,
                  containerAnimation: horizontalTween,
                  start: "left 85%",
                  end: "left 50%",
                  scrub: 1.5,
                },
              }
            );
          }
        }

        const skillsSection = container.querySelector("#section-skills");
        if (skillsSection) {
          gsap.from(".skill-card", {
            opacity: 0,
            scale: 0.9,
            y: 40,
            stagger: 0.1,
            duration: 0.85,
            ease: "power3.out",
            scrollTrigger: {
              trigger: skillsSection,
              containerAnimation: horizontalTween,
              start: "left 80%",
              toggleActions: "play none none reverse",
            },
          });

          gsap.from(".skill-card .skill-item", {
            opacity: 0,
            y: 15,
            stagger: 0.05,
            duration: 0.6,
            delay: 0.35,
            ease: "power2.out",
            scrollTrigger: {
              trigger: skillsSection,
              containerAnimation: horizontalTween,
              start: "left 80%",
              toggleActions: "play none none reverse",
            },
          });
        }

        const projectsSection = container.querySelector("#section-projects");
        if (projectsSection) {
          gsap.from(".project-card", {
            opacity: 0,
            scale: 0.9,
            y: 50,
            stagger: 0.15,
            duration: 0.9,
            ease: "power3.out",
            scrollTrigger: {
              trigger: projectsSection,
              containerAnimation: horizontalTween,
              start: "left 80%",
              toggleActions: "play none none reverse",
            },
          });

          gsap.from(".project-card .project-detail", {
            opacity: 0,
            y: 15,
            stagger: 0.1,
            duration: 0.6,
            delay: 0.45,
            ease: "power2.out",
            scrollTrigger: {
              trigger: projectsSection,
              containerAnimation: horizontalTween,
              start: "left 80%",
              toggleActions: "play none none reverse",
            },
          });
        }

        return () => { };
      });

      mm.add("(max-width: 767px)", () => {
        const panels = gsap.utils.toArray(".panel");
        panels.forEach((panel) => {
          const title = panel.querySelector(".section-title");
          if (title) {
            gsap.from(title, {
              opacity: 0,
              y: 40,
              duration: 0.8,
              ease: "power3.out",
              scrollTrigger: {
                trigger: panel,
                start: "top 80%",
                toggleActions: "play none none reverse",
              },
            });
          }

          const mainTitle = panel.querySelector(".main-title");
          if (mainTitle) {
            gsap.from(mainTitle, {
              opacity: 0,
              letterSpacing: "0.2em",
              duration: 0.8,
              ease: "power2.out",
              scrollTrigger: {
                trigger: panel,
                start: "top 80%",
                toggleActions: "play none none reverse",
              },
            });
          }

          const staggerItems = panel.querySelectorAll(".stagger-item");
          if (staggerItems.length) {
            gsap.from(staggerItems, {
              opacity: 0,
              y: 30,
              stagger: 0.15,
              duration: 0.75,
              ease: "power3.out",
              scrollTrigger: {
                trigger: panel,
                start: "top 75%",
                toggleActions: "play none none reverse",
              },
            });
          }
        });

        const contactPanel = document.querySelector("#section-contact");
        if (contactPanel) {
          const thankTitle = contactPanel.querySelector(".thank-title");
          const youTitle = contactPanel.querySelector(".you-title");
          if (thankTitle) {
            gsap.fromTo(thankTitle,
              { opacity: 0, y: 30, letterSpacing: "0.2em" },
              {
                opacity: 1, y: 0, letterSpacing: "0em",
                duration: 0.8,
                ease: "power3.out",
                scrollTrigger: {
                  trigger: contactPanel,
                  start: "top 80%",
                  toggleActions: "play none none reverse",
                },
              }
            );
          }
          if (youTitle) {
            gsap.fromTo(youTitle,
              { opacity: 0, y: 30, letterSpacing: "0.2em" },
              {
                opacity: 1, y: 0, letterSpacing: "0em",
                duration: 0.8,
                delay: 0.3,
                ease: "power3.out",
                scrollTrigger: {
                  trigger: contactPanel,
                  start: "top 80%",
                  toggleActions: "play none none reverse",
                },
              }
            );
          }
        }

        gsap.from(".skill-card", {
          opacity: 0,
          scale: 0.9,
          y: 30,
          stagger: 0.1,
          duration: 0.75,
          ease: "power3.out",
          scrollTrigger: {
            trigger: "#section-skills",
            start: "top 75%",
            toggleActions: "play none none reverse",
          },
        });

        gsap.from(".skill-card .skill-item", {
          opacity: 0,
          y: 10,
          stagger: 0.05,
          duration: 0.5,
          delay: 0.25,
          ease: "power2.out",
          scrollTrigger: {
            trigger: "#section-skills",
            start: "top 75%",
            toggleActions: "play none none reverse",
          },
        });

        gsap.from(".project-card", {
          opacity: 0,
          scale: 0.9,
          y: 35,
          stagger: 0.15,
          duration: 0.85,
          ease: "power3.out",
          scrollTrigger: {
            trigger: "#section-projects",
            start: "top 75%",
            toggleActions: "play none none reverse",
          },
        });

        gsap.from(".project-card .project-detail", {
          opacity: 0,
          y: 10,
          stagger: 0.1,
          duration: 0.5,
          delay: 0.35,
          ease: "power2.out",
          scrollTrigger: {
            trigger: "#section-projects",
            start: "top 75%",
            toggleActions: "play none none reverse",
          },
        });

        return () => { };
      });

      return () => {
        mm.revert();
      };
    },
    { scope: viewportRef }
  );

  const handleNavigate = (index) => {
    const container = containerRef.current;
    if (!container) return;

    if (window.innerWidth >= 768) {
      const panels = gsap.utils.toArray(".panel");
      const maxScroll = container.scrollWidth - window.innerWidth;
      const targetScroll = (maxScroll * index) / (panels.length - 1) + container.offsetTop;
      window.scrollTo({ top: targetScroll, behavior: "smooth" });
    } else {
      const panelIds = [
        "section-hero",
        "section-about",
        "section-skills",
        "section-projects",
        "section-contact",
      ];
      const targetEl = document.getElementById(panelIds[index]);
      if (targetEl) {
        targetEl.scrollIntoView({ behavior: "smooth" });
      }
    }
  };

  return (
    <div id="viewport" ref={viewportRef} className="bg-[#0A0A0A] text-[#FFFFFF] font-sans selection:bg-[#E6DFD3] selection:text-[#0A0A0A]">
      <Navbar onNavigate={handleNavigate} />

      <main
        id="panel-container"
        ref={containerRef}
        className="flex flex-col md:flex-row md:w-[500vw] md:h-screen w-full relative overflow-x-hidden md:overflow-visible"
      >
        <HeroSection onExplore={() => handleNavigate(1)} />
        <AboutSection />
        <SkillsSection />
        <ProjectsSection />
        <FooterSection />
      </main>
    </div>
  );
}

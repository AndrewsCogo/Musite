USE [webSite]
GO
/****** Object:  StoredProcedure [dbo].[webChatServerRemove]    Script Date: 02/22/2011 18:38:23 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE PROCEDURE [dbo].[webChatServerRemove]
@minutes int
AS
BEGIN

	DELETE FROM [dbo].[webChatServer] WHERE DATEDIFF(minute, [dateSay], getDate()) > @minutes

END

